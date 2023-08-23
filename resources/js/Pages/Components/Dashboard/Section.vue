<template>
    <div>
        <div data-themes="foliage">
            <div
                class="flex flex-col h-screen overflow-x-auto no-scrollbar p-2"
            >
                <div class="p-5">
                    <div v-if="sectionContent == 'Plants'">
                        <p>This is Plants Fav List</p>

                        <div class="overflow-x-auto">
                            <table
                                aria-label="table of favourite plants"
                                class="table"
                            >
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>Plant Name</th>
                                        <th>Remove Bookmark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="favPlant in favPlants"
                                        class="hover:bg-neutral-focus"
                                    >
                                        <td>
                                            {{ favPlant.name }}
                                        </td>
                                        <td>
                                            <div class="btn">Remove</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div v-else-if="sectionContent == 'NutDefs'">
                        <p>This is NutDef Fav List</p>
                        <div class="overflow-x-auto">
                            <table
                                aria-label="table of nutrient deficiencies"
                                class="table"
                            >
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>Nutrient Deficiencies Name</th>
                                        <th>Remove Bookmark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="favNutDef in favNutDefs"
                                        class="hover:bg-neutral-focus"
                                    >
                                        <td>
                                            {{ favNutDef.name }}
                                        </td>
                                        <td>
                                            <div class="btn">Remove</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div v-else-if="sectionContent == 'Algaes'">
                        <p>This is Algae Fav List</p>
                        <div class="overflow-x-auto">
                            <table aria-label="table of algaes" class="table">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>Algaes Name</th>
                                        <th>Remove Bookmark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="favAlgae in favAlgaes"
                                        class="hover:bg-neutral-focus"
                                    >
                                        <td>
                                            {{ favAlgae.name }}
                                        </td>
                                        <td>
                                            <div class="btn">Remove</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div v-else>
                        <p>Dashboard Home</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        sectionContent: String,
        favPlants: Object,
        favNutDefs: Object,
        favAlgaes: Object,
    },
    setup(props) {
        // console.log(for(props.favPlants in favplant));
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
