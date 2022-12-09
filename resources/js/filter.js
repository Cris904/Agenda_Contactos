new Vue({
    el: '#books',
    created: function() {
        this.getBooks();
    },
    data: {
        lists: [],
        name:''
    },
    methods: {
        getBooks: function() {
            axios.get('books.index').then(response => {
                this.lists = response.data
        });
        }
    },
    computed:{
        searchBook: function () {
            return this.lists.filter((item) => {
                return item.name.toLowerCase().includes(this.name.toLowerCase()) || 
                item.phone.toLowerCase().includes(this.phone.toLowerCase()) ||
                item.age.toLowerCase().includes(this.age.toLowerCase()) ||
                item.email.toLowerCase().includes(this.email.toLowerCase());
            });
        }
    }
})