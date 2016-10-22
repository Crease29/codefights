function sortByHeight(a) {
    for (var i = 0; i < a.length; i++) {
        var minIndex = -1,
            tmp = a[i];
        if (a[i] === -1) {
            continue;
        }
        for (var j = i; j < a.length; j++) {
            if (a[j] !== -1) {
                if (minIndex === -1 || a[j] < a[minIndex]) {
                    minIndex = j;
                }
            }
        }
        a[i] = a[minIndex];
        a[minIndex] = tmp;
    }
    return a;
}