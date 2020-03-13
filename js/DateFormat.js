function dateFormat(date) {
    var dateFormatted = new Date(date);
    var options = { weekday: "long", year: "numeric", month: "long", day: "numeric" };
    print(dateFormatted.toLocaleDateString("es-ES", options));
}


dateFormat("09/04/1992");