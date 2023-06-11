// PUBLIC CLASSES

class Novel {
    constructor(title, author) {
        this.title = title;
        this.author = author;
        this.id = Date.now();
    }
}

class NovelCollection {
    constructor() {
        this.novels = [];
    }

    saveNovels() {
        fetch("/api/novels", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(this.novels),
        })
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }

    addNovel(title, author) {
        const novel = new Novel(title, author);
        this.novels.push(novel);
        this.saveNovels();
        this.displayNovels();
    }

    removeNovel(id) {
        this.novels = this.novels.filter((novel) => novel.id !== id);
        this.saveNovels();
        this.displayNovels();
    }

    loadNovels() {
        fetch("/api/novels")
            .then((response) => response.json())
            .then((data) => {
                this.novels = data;
                this.displayNovels();
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }

    displayNovels() {
        const novelList = document.getElementById("bookList");
        novelList.innerHTML = "";

        this.novels.forEach((novel, index) => {
            const novelItem = document.createElement("div");
            novelItem.classList.add("book-item");
            if (index % 2 === 0) {
                novelItem.classList.add("even");
            } else {
                novelItem.classList.add("odd");
            }

            const novelInfo = document.createElement("span");
            novelInfo.textContent = `${novel.title} by ${novel.author}`;

            const editBtn = document.createElement("button");
            editBtn.classList.add("btn", "btn-primary", "btn-sm");
            editBtn.textContent = "Edit";
            editBtn.addEventListener("click", () => this.editNovel(novel.id));

            const removeBtn = document.createElement("button");
            removeBtn.classList.add("btn", "btn-danger", "btn-sm");
            removeBtn.textContent = "Remove";
            removeBtn.addEventListener("click", () =>
                this.removeNovel(novel.id)
            );

            novelItem.appendChild(novelInfo);
            novelItem.appendChild(editBtn);
            novelItem.appendChild(removeBtn);

            novelList.appendChild(novelItem);
        });

        if (this.novels.length > 0) {
            novelList.classList.add("border");
        } else {
            novelList.classList.remove("border");
        }
    }

    editNovel(id) {
        const novel = this.novels.find((novel) => novel.id === id);
        if (novel) {
            const newTitle = prompt("Enter the new title:");
            if (newTitle) {
                novel.title = newTitle;
                this.saveNovels();
                this.displayNovels();
            }
        }
    }
}

const novelCollection = new NovelCollection();
novelCollection.loadNovels();
novelCollection.displayNovels();

const addBtn = document.getElementById("addBtn");
addBtn.addEventListener("click", () => {
    const titleInput = document.getElementById("titleInput");
    const authorInput = document.getElementById("authorInput");

    const title = titleInput.value.trim();
    const author = authorInput.value.trim();

    if (title !== "" && author !== "") {
        novelCollection.addNovel(title, author);
        titleInput.value = "";
        authorInput.value = "";
    }
});

const addNewNovelSection = document.querySelector(".textfield-and-btn");
const novelListSection = document.getElementById("bookList");
const contactPageSection = document.querySelector(".contact-container");
const displayDataSection = document.querySelector(".dispay-data");
const pageHeaderSection = document.querySelector(".page-header");
const addNewBtn = document.querySelector(".nav-btn-add");
const addNewNovelsSection = document.querySelector(".textfield-and-btn");

function showList() {
    novelListSection.style.display = "block";
    addNewNovelSection.style.display = "none";
    contactPageSection.style.display = "none";
    pageHeaderSection.innerHTML = `<h1>All Awesome Books</h1>`;
}
showList();

function addNew() {
    novelListSection.style.display = "none";
    addNewNovelSection.style.display = "block";
    contactPageSection.style.display = "none";
    pageHeaderSection.innerHTML = `<h1>Add a new Books</h1>`;
}
addNew();

function contact() {
    novelListSection.style.display = "none";
    addNewNovelSection.style.display = "none";
    contactPageSection.style.display = "block";
    pageHeaderSection.innerHTML = `<h1>Contact Information</h1>`;
}
contact();

function displayData() {
    addNewNovelsSection.style.display = "none";
    novelListSection.style.display = "block";
    contactPageSection.style.display = "none";
    pageHeaderSection.innerHTML = "<h1>All Awesome Books</h1>";
    const currentDate = new Date();
    const formattedDate = currentDate.toDateString();
    displayDataSection.textContent = formattedDate;
}
displayData();

function updateAddNewBtn() {
    if (window.innerWidth < 768) {
        addNewBtn.innerHTML = `<span>Add</span>`;
    } else {
        addNewBtn.innerHTML = `<span>Add new</span>`;
    }
}

updateAddNewBtn();
window.addEventListener("resize", updateAddNewBtn);

// LOGIN PART

const loginFOrm = document.querySelector(".login-form");
const emailField = document.getElementById("email");
const passwordField = document.getElementById("password");
const getWraper = document.querySelector(".wraper");
const errorMassege = document.querySelector(".error-password");
const headerPage = document.querySelector(".header-public");
const forgetPassword = document.querySelector(".forget-password");
const reset = document.querySelector(".form-control");
const partner = document.querySelector(".partner-container");
document.body.style.overflow = "hidden";

function backtologin() {
    forgetPassword.style.display = "none";
    loginFOrm.style.display = "block";
}

function resetpassword() {
    reset.innerHTML = `najibllah`;
}

function forget() {
    loginFOrm.style.display = "none";
    forgetPassword.style.display = "flex";
}

function openMain() {
    if (emailField.value === "najib" && passwordField.value === "123") {
        getWraper.style.display = "block";
        headerPage.style.display = "block";
        loginFOrm.style.display = "none";
        // document.body.style.overflow = "auto";
    } else {
        errorMassege.innerHTML = `password or username is incorrect`;
    }
}

// function partner() {
//     const link = document.querySelector(".partnerLink");
//     link.addEventListener("click", partner());
// }
