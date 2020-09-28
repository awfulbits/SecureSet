function setView(view) {
    var component = document.createElement("DIV");
    component.id = view;
    document.getElementById("main-view").appendChild(component);

    return component;
}