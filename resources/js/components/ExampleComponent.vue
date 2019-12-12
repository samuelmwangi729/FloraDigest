<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-default mt-5">
                    <div class="panel-heading">
                        This is mpanel heading 
                    </div>
                    <div class="panel-body">
                        <img :src="getPhoto()">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data:{

        },
        methods:{
            getPhoto:function(){
                return "img/logo.png";
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
