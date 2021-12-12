<template>
  <div>

    <h1 align="center">Список товаров</h1>
    <hr>
    <Tasks align="center"
            v-bind:goods="goods"
            v-on:delete="Delete"
            v-on:insert="Insert"
    />


    <hr>


  </div>
</template>

<script>
import Tasks from '@/components/Tasks'


export default {
  name: "app",
  data(){
    return {
      goods: [
        {id: parseInt(1), name: "Молоко", cost: "200"},
        {id: parseInt(2), name: "Шоколад", cost: "580"},
        {id: parseInt(3), name: "т.т", cost: "320"}
      ]
    }
  },
  components:{
    Tasks
  },
  methods:{
    Delete(){

      var id = parseInt(prompt('id удаляемого товара', 0))
      this.goods = this.goods.filter(t=>t.id !== id)
    },
    Insert(){
      var id = parseInt(prompt('id добавляемого товара', 0))
      var name = prompt('Название товара', 0)
      var cost = prompt('Цена товара', 0)
      const newGood = {
        id: id,
        name: name,
        cost: cost
      }
      this.goods.push(newGood)
    }
  }
}
</script>
