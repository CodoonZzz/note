<template>
  <div>Home</div>
</template>

<script>
    import {getUser} from '../api/user'

    export default {
        async mounted() {
            let res = await getUser()
            console.log(res);
        }
    }
</script>

<style scoped>

</style>
