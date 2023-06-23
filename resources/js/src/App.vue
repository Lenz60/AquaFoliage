<template>
    <div>
        <h1 class="card shadow-xl bg-slate-200 text-xl rounded-sm m-5">
            Hello world
        </h1>
        <button @click="fish++" class="btn">🐟</button>
        <p>you clicked the fish {{ fish }} times</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            fish: 1,
        };
    },
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
