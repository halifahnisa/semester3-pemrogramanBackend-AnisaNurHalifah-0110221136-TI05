const download = () => {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve("Download selesai");
        }, 3000);
    });
};

const hasilDownload = () => {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve("Hasil Download: windows-10.exe");
        }, 7000);
    });
};

const main = async() => {
    console.log(await download());
    console.log(await hasilDownload());
};

main();