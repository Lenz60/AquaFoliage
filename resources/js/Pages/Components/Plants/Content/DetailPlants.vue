<template>
    <div>
        <div v-if="Desc == 'plants'">
            <Head title="Plants Descriptions"></Head>
            <PlantsDesc
                :Payload="Payload"
                :Content="Desc"
                :FavData="FavData"
                :State="State"
            ></PlantsDesc>
        </div>
        <div v-else-if="Desc == 'nutDef'">
            <Head title="Nutrient Deficiencies Descriptions"></Head>
            <NutDefDesc
                :Payload="Payload"
                :Content="Desc"
                :FavData="FavData"
                :State="State"
            ></NutDefDesc>
        </div>
        <div v-else>
            <Head title="Algae Descriptions"></Head>
            <AlgaeDesc
                :Payload="Payload"
                :Content="Desc"
                :FavData="FavData"
                :State="State"
            ></AlgaeDesc>
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
    props: ["Desc", "Payload", "State", "FavData"],
    setup(props) {
        // console.log(props.Desc);
        // console.log(props.FavData["favPlant"]);
        onMounted(() => {
            // console.log(this.name);
        });
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
