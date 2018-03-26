<template>
    <div class="job-list" v-bind="jobs">
        <div class="row">
            <job-cell :job=""></job-cell>
        </div>
    </div>
</template>

<script>
    export default {
        name: "job-list",
        props: [],
        data: {

        }


    }
</script>

<style scoped>

</style>
