<template>
    <div>
        <div v-if="Desc == 'plants'" class="border-2 border-green-500">
            <Head title="Plants Descriptions"></Head>
            <PlantsDesc :Payload="Payload" :Content="Desc"></PlantsDesc>
        </div>
        <div v-else-if="Desc == 'nutDef'">
            <Head title="Nutrient Deficiencies Descriptions"></Head>
            <NutDefDesc :Payload="Payload" :Content="Desc"></NutDefDesc>
        </div>
        <div v-else>
            <Head title="Algae Descriptions"></Head>
            <AlgaeDesc :Payload="Payload" :Content="Desc"></AlgaeDesc>
        </div>
    </div>
</template>

<script>
import { onMounted } from "vue";
import PlantsDesc from "./Desc/PlantsDescription.vue";
import { Head } from "@inertiajs/vue3";
import NutDefDesc from "./Desc/NutDefDescription.vue";
import AlgaeDesc from "./Desc/AlgaeDescription.vue";

export default {
    components: {
        Head,
        PlantsDesc,
        NutDefDesc,
        AlgaeDesc,
    },
    props: ["Desc", "Payload"],
    setup(props) {
        // console.log(props.Desc);
        onMounted(() => {
            // console.log(this.name);
        });
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
