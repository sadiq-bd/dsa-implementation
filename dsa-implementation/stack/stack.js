class Stack {

    constructor () {
        this.items = [];
    }

    push(item) {
        let lastIndex = this.getLastIndex();
        this.items[lastIndex + 1] = item; 
        return lastIndex + 1;
    }

    pop() {
        if (this.isEmpty()) return -1;
        let lastIndex = this.getLastIndex();
        this.items.splice(lastIndex, 1);
        return lastIndex;
    }

    isEmpty() {
        return this.getLastIndex == -1;
    }

    getLastIndex() {
        return this.items.length - 1;
    }

    getItems() {
        return this.items;
    }

}

let stack = new Stack;

stack.push('item1');

stack.push('item2');

stack.push('item3');

stack.pop();

stack.pop();

stack.push('item4');


console.log(stack.getItems());

