<template>
    <Head title="Aqua Foliage"> </Head>
    <div class="bg-[#101310] overflow-hidden">
        <Navbar class="sticky top-0 z-50"></Navbar>
        <Hero></Hero>
        <Section></Section>
        <Poem></Poem>
        <!-- <PreFooter></PreFooter> -->
        <Footer></Footer>
        <!-- <SinglePages :fish="fish"></SinglePages> -->
    </div>
</template>

<script>
import { Head, Link } from "@inertiajs/vue3";
import Navbar from "./Components/Home/Navbar.vue";
import Hero from "./Components/Home/Hero.vue";
import Section from "./Components/Home/Section.vue";
import Poem from "./Components/Home/Poem.vue";
import PreFooter from "./Components/Home/PreFooter.vue";
import Footer from "./Components/Home/Footer.vue";
import { onMounted } from "vue";
// import SinglePages from "./Components/SinglePages.vue";
export default {
    components: {
        Head,
        Link,
        Navbar,
        Hero,
        Section,
        Poem,
        PreFooter,
        Footer,
    },
    // data() {
    //     return {
    //         fish: 0,
    //     };
    // },
    setup() {
        onMounted: () => {
            location.reload();
        };
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
