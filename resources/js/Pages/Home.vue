<template>
    <div class="relative">
        <Navbar class="sticky top-0 z-50"></Navbar>
        <Hero></Hero>
        <Section></Section>
        <Poem></Poem>
        <PreFooter></PreFooter>
        <Footer></Footer>
        <!-- <SinglePages :fish="fish"></SinglePages> -->
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import Navbar from "./Components/Home/Navbar.vue";
import Hero from "./Components/Home/Hero.vue";
import Section from "./Components/Home/Section.vue";
import Poem from "./Components/Home/Poem.vue";
import PreFooter from "./Components/Home/PreFooter.vue";
import Footer from "./Components/Home/Footer.vue";
// import SinglePages from "./Components/SinglePages.vue";
export default {
    components: {
        Link,
        Navbar,
        Hero,
        Section,
        Poem,
        PreFooter,
        Footer,
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
