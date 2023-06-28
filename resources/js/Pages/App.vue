<template>
    <div>
        <SinglePages :fish="fish"></SinglePages>
    </div>
</template>

<script>
import SinglePages from "./Components/SinglePages.vue";
export default {
    components: {
        SinglePages,
    },
    data() {
        return {
            fish: 0,
        };
    },
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
