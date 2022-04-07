
class Store {

    /**
     * Class constructor
     *
     * @return void
     */
    constructor(storeClick) {
        let selector = '#scrollbar';
        this.onStoreClick = storeClick;
        this.rootEl = document.querySelector(selector);
        this.contentEl = this.rootEl.querySelector('.store-box');
        this.stores = [];
    }

    init() {
        return this;
    }


    addStore(num, store) {
        let elemStore = (num > 1) ? this.contentEl.cloneNode("true") : this.contentEl;
        let nameEl = elemStore.querySelector(".store-name");
        let addressEl = elemStore.querySelector(".store-address");

        nameEl.innerHTML = store.name;
        addressEl.innerHTML = store.address;

        this.stores.push(elemStore);
        elemStore.addEventListener('click', this.onStoreClick.bind(null, [store.lat, store.lng, this.stores]), true);

        if (num > 1) {
            this.rootEl.appendChild(elemStore);
        }
    }
}

export default Store;
