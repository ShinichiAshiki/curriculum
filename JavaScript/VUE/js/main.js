var app = new Vue({
    el: '#app',
    data: {
        list: [],
        addText: '',
        srcText: '',
    },
    //watchでlistの変更を監視
    watch: {
        list: {
            handler: function() {
                //localStorageにデータを保存
                localStorage.setItem("list", JSON.stringify(this.list));
            },
            deep: true
        }
    },
    //マウントされた時にlocalStorageからデータを取得
    mounted: function() {
        this.list = JSON.parse(localStorage.getItem("list")) || [];
    },
    computed: {
        cntRemain: function (){
            return this.list.filter(function(todo) {
                return !todo.isChecked;
            }).length;
        },
        srclist: function() {
            var srcReslt = [];
            for(var i = 0; i < this.list.length; i++) {
                var tlist = this.list[i];
                console.log('%d',i);
                if(tlist.text.indexOf(this.srcText) !== -1) {

                    srcReslt.push(tlist);
                }
            }
            return srcReslt;
        }
    },
    methods: {
        addToDo: function() {
            if (this.addText !== '') {
                this.list.push({
                    text: this.addText, 
                    isChecked: false,
                });
            }
            this.addText = '';
        },
        deleteBtn: function() {
            this.list = this.list.filter(function(todo) {
                return !todo.isChecked;
            });
        }
    }
});