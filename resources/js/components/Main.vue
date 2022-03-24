<template>
    <div>
        <div v-for="post in posts" :key="post.id">
            <ul>
                <li>ID: {{post.id}}</li>
                <li>Title: {{post.title}}</li>
                <li>Content: {{post.content}}</li>
                
            </ul>
        </div>
        
    </div>
</template>

<script>
    export default {
        name: "Main",
        data(){
            return{
                posts:[]
            }
        },

        methods:{
            getPosts: function (){
                axios
                .get("/api/posts")
                .then((response) => {
                    this.posts = response.data;
                })
            }
        },

        created(){
            this.getPosts()
        }
    }
</script>
