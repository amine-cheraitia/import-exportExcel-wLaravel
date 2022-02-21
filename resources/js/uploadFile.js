/* const { default: axios } = require("axios"); */

const form = document.querySelector("#uploadFile");

const handleUpload = function (e) {
    e.preventDefault();
    const data = new FormData(this);

    axios
        .post(this.action, data)
        .then((res) => console.log(res))
        .catch((err) => console.log(err));
};
form.addEventListener("submit", handleUpload);
