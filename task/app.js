var importhere="index, store, update, destroy";

const main = () => {
    console.log("method index - menampilkan buah");
    index();
    console.log("method store - menampilkan buah pisang");
    store("pisang");
    console.log("Method update - Update data 0 menjadi Kelapa");
    update(0, "Kelapa");
    console.log("Method destroy - Menghapus data 0");
    destroy(0);
};

console.log(main());