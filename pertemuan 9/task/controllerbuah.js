var fruits = require("./isi.js");

function index  () {
    for (let fruit of fruits) {
        console.log(fruit);
    }
};

function store (name) {
    fruit.push(name);
    index();
};
index();
module.exports = { index, store };