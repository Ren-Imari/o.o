<template>
  <div >
    <ul>
      <Task
          v-for="goods in goods"
          v-bind:key="goods.id"
          v-bind:goods="goods"
      />
    </ul>
    <button v-on:click="$emit('delete')">Удалить</button>
    <button v-on:click="$emit('insert')">Добавить</button>
  </div>
</template>

<script>
import Task from '@/components/Task'
export default {
  props:['goods'],
  components:{
    Task
  }
}
</script>

<style scoped>
ul
{
  list-style: none;
}
</style>
