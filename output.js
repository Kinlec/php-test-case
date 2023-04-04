function printPairsWithDelay(arr) {
    arr.forEach((value, key) => {
        setTimeout(() => {
            console.log(`Key: ${key}, Value: ${value}`);
        }, key * 3000);
    });
}

let arr = ["a", "b", "c", "d", "e", "f"];
printPairsWithDelay(arr);