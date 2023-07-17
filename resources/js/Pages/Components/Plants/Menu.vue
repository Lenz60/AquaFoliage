<template>
    <div
        class="card shadow-xl rounded-sm bg-neutral-focus bg-blend-color-dodge"
    >
        <div
            class="font-montserrat text-primary h-screen overflow-x-auto no-scrollbar pb-10"
        >
            <ul class="menu p-5 w-full h-max">
                <li>
                    <span
                        @click="toggleActive1()"
                        :class="{
                            'menu-dropdown-show': isActive1,
                        }"
                        class="text-lg menu-dropdown-toggle menu-dropdown-hide"
                    >
                        <img
                            src="/icons/plantsico.png"
                            class="w-[42px] h-[25px]"
                        />
                        Plant Characteristics
                    </span>
                    <ul
                        :class="{
                            'menu-dropdown-show': categories1,
                            'menu-dropdown-show': isActive1,
                        }"
                        class="menu-dropdown"
                    >
                        <li v-for="plant in Plants">
                            <Link
                                :href="route('plantCharacteristic')"
                                :data="{ content: 'plants', id: plant.id }"
                                ><a>{{ plant.name }}</a></Link
                            >
                        </li>
                    </ul>
                </li>
                <li>
                    <span
                        @click="toggleActive2()"
                        :class="{
                            'menu-dropdown-show': isActive2,
                        }"
                        class="text-lg menu-dropdown-toggle menu-dropdown-hide"
                    >
                        <img
                            src="/icons/nutrientico.png"
                            class="w-[42px] h-[34.29px]"
                        />
                        Nutrient Deficiencies
                    </span>
                    <ul
                        :class="{
                            'menu-dropdown-show': categories2,
                            'menu-dropdown-show': isActive2,
                        }"
                        class="menu-dropdown"
                    >
                        <li v-for="nutDef in NutDefs">
                            <Link
                                :href="route('plantCharacteristic')"
                                :data="{ content: 'nutDef', id: nutDef.id }"
                                ><a>{{ nutDef.name }}</a></Link
                            >
                        </li>
                    </ul>
                </li>
                <li>
                    <span
                        @click="toggleActive3()"
                        :class="{
                            'menu-dropdown-show': isActive3,
                        }"
                        class="text-lg menu-dropdown-toggle menu-dropdown-hide"
                    >
                        <img
                            src="/icons/algaeico.png"
                            class="w-[42px] h-[35.72px]"
                        />
                        Algae Characteristics
                    </span>
                    <ul
                        :class="{
                            'menu-dropdown-show': categories3,
                            'menu-dropdown-show': isActive3,
                        }"
                        class="menu-dropdown"
                    >
                        <li v-for="algae in Algaes">
                            <Link
                                :href="route('plantCharacteristic')"
                                :data="{ content: 'algae', id: algae.id }"
                                ><a>{{ algae.name }}</a></Link
                            >
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";

export default {
    props: ["Content", "Plants", "Algaes", "NutDefs"],
    components: {
        Link,
    },
    setup(props) {
        const isActive1 = ref(false);
        const isActive2 = ref(false);
        const isActive3 = ref(false);
        const categories1 = ref(false);
        const categories2 = ref(false);
        const categories3 = ref(false);

        onMounted(() => {
            if (props.Content == "plants") {
                categories1.value = true;
                console.log("Categories 1 : " + categories1.value);
            } else if (props.Content == "nutDef") {
                categories2.value = true;
                console.log("Categories 2 : " + categories2.value);
            } else if (props.Content == "algae") {
                categories3.value = true;
                console.log("Categories 3 : " + categories3.value);
            }
        });

        // const checkContent = () => {};

        const contentDesc = ref(props.Content);
        // checkContent();
        // console.log(contentDesc.value);

        return {
            contentDesc,
            isActive1,
            isActive2,
            isActive3,
            categories1,
            categories2,
            categories3,
        };
    },
    methods: {
        toggleActive1() {
            console.log(this.isActive1);
            console.log(this.Content);
            console.log(this.categories1);
            this.isActive1 = !this.isActive1;
        },
        toggleActive2() {
            console.log(this.isActive2);
            console.log(this.Content);
            console.log(this.categories2);
            this.isActive2 = !this.isActive2;
        },
        toggleActive3() {
            console.log(this.isActive3);
            console.log(this.Content);
            console.log(this.categories3);
            this.isActive3 = !this.isActive3;
        },
    },
};
</script>

<style scoped>
/* Hide scrollbar for Chrome, Safari and Opera */
.no-scrollbar::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.no-scrollbar {
    -ms-overflow-style: none; /* IE and Edge */
    scrollbar-width: none; /* Firefox */
}
</style>
