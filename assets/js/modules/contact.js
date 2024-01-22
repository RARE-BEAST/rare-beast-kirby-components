export function initContact() {

    const dialogEl = document.querySelector('#js-contact');
    if (!dialogEl) {
        return; // Exit the function if #js-contact doesn't exist
    }

    const mainEl = document.querySelector('#main');
    const dialog = new A11yDialog(dialogEl, mainEl);

    // Get the button that opens the modal
    const btn = document.querySelector(".js-contact-open");

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        dialog.show();
    };

}