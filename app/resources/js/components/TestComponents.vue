<template>
    <div class="col-xs-12">
        <button v-on:click="update" class="btn btn-default" v-if="!is_refresh">Обновить - {{id}}...</button>
        <span v-if="is_refresh">Обновляем...</span>
        <table>
            <thead>
            <tr>
                <th>Название</th>
                <th>Заголовок</th>
            </tr>
            </thead>
            <tr v-for="url in urldata">
                <td>{{url.title}}</td>

                <td>
                    {{url.url}}
                </td>
            </tr>
        </table>

    </div>
</template>

<script>
    export default {
        data:function(){
            return {
                'urldata':[],
                'is_refresh': false,
                'id':0
            }
        },
        mounted() {
            this.update();
        },
        methods: {

            update: function () {
                this.is_refresh=true;
               axios.get('/public/test/ajax').then((response)=> {
                    this.urldata = response.data
                    this.is_refresh=false;
                    this.id++;

               });
            }
        }
    }
</script>
