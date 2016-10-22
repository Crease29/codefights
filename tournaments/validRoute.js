function validRoute(travelTimes, readyTimes, cancelTimes) {
    var earliestStartTime = 0;
    var latestStartTime = 24 * 60 * 60;
    var totalWorkTime = 0;

    for (var i = 0; i < readyTimes.length; i++) {
        if (earliestStartTime + totalWorkTime > cancelTimes[i]) {
            return -1;
        }
        latestStartTime = Math.min(latestStartTime,
                                   cancelTimes[i] - totalWorkTime);
        if (latestStartTime + totalWorkTime < readyTimes[i]) {
            totalWorkTime = readyTimes[i] - latestStartTime;
        }
        earliestStartTime = Math.max(earliestStartTime,
                                     readyTimes[i] - totalWorkTime);

        totalWorkTime += travelTimes[i];
    }

    return totalWorkTime;
}