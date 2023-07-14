<template>
    <div>
        <!--! Todo Make this components only using one description component only -->
        <!--! by passing the Desc as props and do the if else in the that one single components description -->
        <div v-if="Desc == 'plants'">
            <PlantsDesc :Payload="Payload"></PlantsDesc>
        </div>
        <div v-else-if="Desc == 'nutDef'">
            <NutDefDesc :Payload="Payload"></NutDefDesc>
        </div>
        <div v-else>
            <AlgaeDesc :Payload="Payload"></AlgaeDesc>
        </div>
    </div>
</template>

<script>
import { onMounted } from "vue";
import PlantsDesc from "./Desc/PlantsDescription.vue";
import NutDefDesc from "./Desc/NutDefDescription.vue";
import AlgaeDesc from "./Desc/AlgaeDescription.vue";

export default {
    components: {
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
