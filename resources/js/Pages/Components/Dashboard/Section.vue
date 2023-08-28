<template>
    <div>
        <div data-themes="foliage">
            <div
                class="flex flex-col h-screen overflow-x-auto no-scrollbar p-2"
            >
                <div class="p-5">
                    <div v-if="sectionContent == 'Plants'">
                        <p>Plants Bookmark Lists</p>

                        <div class="overflow-x-auto">
                            <table
                                aria-label="table of favourite plants"
                                class="table"
                            >
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Plant Name</th>
                                        <th>Remove Bookmark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="(favPlant, no) in favPlants"
                                        class="hover:bg-neutral-focus"
                                    >
                                        <td>{{ no + 1 }}</td>
                                        <td>
                                            {{ favPlant.name }}
                                        </td>
                                        <td>
                                            <div
                                                @click="
                                                    removeFav(
                                                        'plants',
                                                        favPlant.id
                                                    )
                                                "
                                                class="btn btn-outline btn-accent"
                                            >
                                                Remove
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div v-else-if="sectionContent == 'NutDefs'">
                        <p>Nutrient Deficiencies Bookmark Lists</p>
                        <div class="overflow-x-auto">
                            <table
                                aria-label="table of nutrient deficiencies"
                                class="table"
                            >
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nutrient Deficiencies Name</th>
                                        <th>Remove Bookmark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="(favNutDef, no) in favNutDefs"
                                        class="hover:bg-neutral-focus"
                                    >
                                        <td>{{ no + 1 }}</td>
                                        <td>
                                            {{ favNutDef.name }}
                                        </td>
                                        <td>
                                            <div
                                                @click="
                                                    removeFav(
                                                        'nutDef',
                                                        favNutDef.id
                                                    )
                                                "
                                                class="btn btn-outline btn-accent"
                                            >
                                                Remove
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div v-else-if="sectionContent == 'Algaes'">
                        <p>Algae Bookmark Lists</p>
                        <div class="overflow-x-auto">
                            <table aria-label="table of algaes" class="table">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Algaes Name</th>
                                        <th>Remove Bookmark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="(favAlgae, no) in favAlgaes"
                                        class="hover:bg-neutral-focus"
                                    >
                                        <td>{{ no + 1 }}</td>
                                        <td>
                                            {{ favAlgae.name }}
                                        </td>
                                        <td>
                                            <div
                                                @click="
                                                    removeFav(
                                                        'algae',
                                                        favAlgae.id
                                                    )
                                                "
                                                class="btn btn-outline btn-accent"
                                            >
                                                Remove
                                            </div>
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
    methods: {
        removeFav(content, id) {
            // console.log($content, $id);
            this.$inertia.post(
                this.route("dashboard.removeFav", [content, id])
            );
        },
    },
};
</script>

<style lang="scss" scoped></style>
