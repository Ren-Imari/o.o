<template>
  <li>
    № {{goods.id}} {{goods.name}} {{goods.cost}}
  </li>

</template>

<script>
export default {
  props:{
    goods:{
    }
  }
}
</script>
