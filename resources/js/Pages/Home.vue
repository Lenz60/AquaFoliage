<template>
    <div>
        <Navbar></Navbar>
        <Hero> </Hero>
        <!-- <SinglePages :fish="fish"></SinglePages> -->
    </div>
</template>

<script>
import Hero from "./Components/Hero.vue";
import Navbar from "./Components/Navbar.vue";
// import SinglePages from "./Components/SinglePages.vue";
export default {
    components: {
        Navbar,
        Hero,
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
