<template>
    <v-app>
        <div>
            <v-btn small color="primary" @click="openAccommodation">Add Accommodation</v-btn>
        </div>
        <v-data-table
                :headers="headers"
                :items="desserts"
                :items-per-page="10"
                class="elevation-1">
            <template v-slot:item.id="{ item }">
                <div class="service-action" align="right">

                    <a class="danger" href="#" title="Remove" @click.prevent="itemAction('delete',item)">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="15" height="15" viewBox="0 0 774.266 774.266"
                             style="enable-background:new 0 0 774.266 774.266;"
                             xml:space="preserve">
<g><g>
		<path d="M640.35,91.169H536.971V23.991C536.971,10.469,526.064,0,512.543,0c-1.312,0-2.187,0.438-2.614,0.875
			C509.491,0.438,508.616,0,508.179,0H265.212h-1.74h-1.75c-13.521,0-23.99,10.469-23.99,23.991v67.179H133.916
			c-29.667,0-52.783,23.116-52.783,52.783v38.387v47.981h45.803v491.6c0,29.668,22.679,52.346,52.346,52.346h415.703
			c29.667,0,52.782-22.678,52.782-52.346v-491.6h45.366v-47.981v-38.387C693.133,114.286,670.008,91.169,640.35,91.169z
			 M285.713,47.981h202.84v43.188h-202.84V47.981z M599.349,721.922c0,3.061-1.312,4.363-4.364,4.363H179.282
			c-3.052,0-4.364-1.303-4.364-4.363V230.32h424.431V721.922z M644.715,182.339H129.551v-38.387c0-3.053,1.312-4.802,4.364-4.802
			H640.35c3.053,0,4.365,1.749,4.365,4.802V182.339z"/>
		<rect x="475.031" y="286.593" width="48.418" height="396.942"/>
		<rect x="363.361" y="286.593" width="48.418" height="396.942"/>
		<rect x="251.69" y="286.593" width="48.418" height="396.942"/></g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
</svg>
                    </a>


                    <a title="Edit" class="normal" href="#" @click.prevent="itemAction('edit',item)">
                        <svg data-v-629e596e="" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15" height="15"
                             viewBox="0 0 485.219 485.22" xml:space="preserve" style="left: 1px;">
                            <g data-v-629e596e="">
                                <path data-v-629e596e="" d="M467.476,146.438l-21.445,21.455L317.35,39.23l21.445-21.457c23.689-23.692,62.104-23.692,85.795,0l42.886,42.897
		C491.133,84.349,491.133,122.748,467.476,146.438z M167.233,403.748c-5.922,5.922-5.922,15.513,0,21.436
		c5.925,5.955,15.521,5.955,21.443,0L424.59,189.335l-21.469-21.457L167.233,403.748z M60,296.54c-5.925,5.927-5.925,15.514,0,21.44
		c5.922,5.923,15.518,5.923,21.443,0L317.35,82.113L295.914,60.67L60,296.54z M338.767,103.54L102.881,339.421
		c-11.845,11.822-11.815,31.041,0,42.886c11.85,11.846,31.038,11.901,42.914-0.032l235.886-235.837L338.767,103.54z
		 M145.734,446.572c-7.253-7.262-10.749-16.465-12.05-25.948c-3.083,0.476-6.188,0.919-9.36,0.919
		c-16.202,0-31.419-6.333-42.881-17.795c-11.462-11.491-17.77-26.687-17.77-42.887c0-2.954,0.443-5.833,0.859-8.703
		c-9.803-1.335-18.864-5.629-25.972-12.737c-0.682-0.677-0.917-1.596-1.538-2.338L0,485.216l147.748-36.986
		C147.097,447.637,146.36,447.193,145.734,446.572z"></path>
                            </g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                            <g data-v-629e596e=""></g>
                </svg>
                    </a>

                </div>
            </template>
        </v-data-table>
        <div class="modal" tabindex="-1" role="dialog" id="manage_accommodations">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Manage Accommodations</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ValidationObserver ref="observer" tag="form" v-slot="{handleSubmit}">
                            <form @submit.prevent="handleSubmit(submitForm)">
                                <input type="hidden" v-model="formData.id"/>
                                <div class="form-group">
                                    <label>Residence*</label>
                                    <ValidationProvider name="Residence" rules="required" v-slot="{ errors }">
                                        <select v-model="formData.residences_id" class="form-control">
                                            <option v-for="ddlResidence in ddlResidences"
                                                    v-bind:value="ddlResidence.id">
                                                {{ ddlResidence.title }}
                                            </option>
                                        </select>
                                        <span class="error-font">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>
                                <div class="form-group">
                                    <label>Resident*</label>
                                    <ValidationProvider name="Resident" rules="required" v-slot="{ errors }">
                                        <select v-model="formData.resident_id" class="form-control">
                                            <option v-for="ddlResident in ddlResidents"
                                                    v-bind:value="ddlResident.id">
                                                {{ ddlResident.name }}
                                            </option>
                                        </select>
                                        <span class="error-font">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>

                                <v-col class="text-right" cols="12" sm="4">
                                    <div class="my-2">
                                        <v-btn small color="primary" type="submit">
                                            {{ (hideSaveBtn) ? 'save' : 'update' }}
                                        </v-btn>
                                    </div>
                                </v-col>
                            </form>
                        </ValidationObserver>
                    </div>
                </div>
            </div>
        </div>
    </v-app>
</template>

<script>
    import swal from 'sweetalert';

    export default {
        name: "accommodations",
        data() {
            return {
                hideSaveBtn: true,
                headers: [],
                desserts: [],
                ddlResidences: {},
                ddlResidents: {},
                formData: {
                    id: 0,
                    residences_id: '',
                    resident_id: ''
                }

            }
        },
        methods: {
            getTableData() {
                let self = this;
                self.headers = [
                    {
                        text: 'Residences',
                        align: 'start',
                        sortable: false,
                        value: 'residences.title',
                    },
                    {
                        text: 'Resident',
                        align: 'start',
                        sortable: false,
                        value: 'resident.name',
                    },
                    {
                        text: 'Action',
                        value: 'id'
                    },
                ];
                axios.get('/accommodation').then((response) => {
                    self.desserts = response.data;
                });
            },
            submitForm() {
                let self = this;
                if (self.hideSaveBtn) {
                    self.addAccommodation();
                } else {
                    self.updateAccommodation();
                }
            },
            resetFrom() {
                this.formData.id = 0;
                this.formData.residences_id = this.formData.resident_id = '';
            },
            openModel() {
                this.$refs.observer.reset();
                this.resetFrom();
                this.getData();
                $('#manage_accommodations').modal('show');
            },
            addAccommodation() {
                delete this.formData.id;
                axios.post('/accommodation', this.formData);
                $('#manage_accommodations').modal('hide');
                this.getTableData();
            },
            getData() {
                let self = this;
                axios.get('/accommodation_data').then((response) => {
                    self.ddlResidences = response.data.residence;
                    self.ddlResidents = response.data.resident;
                });
            },
            openAccommodation() {
                let self = this;
                self.hideSaveBtn = true;
                self.openModel();
            },
            itemAction(type, itemAction) {
                let self = this;
                this.formData.id = itemAction.id;
                if (type == 'edit') {
                    self.hideSaveBtn = false;
                    self.openModel();
                    axios.get('/accommodation/' + itemAction.id).then((response) => {
                        delete response.data.created_at;
                        delete response.data.updated_at;
                        Object.keys(response.data).forEach(function (key) {
                            self.formData[key] = response.data[key];
                        });
                    });
                } else {
                    swal({
                        title: "Are you sure?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {
                                axios.delete('/accommodation/' + this.formData.id).then((res) => {
                                    swal("recode update", "", "success");
                                });

                            } else {
                                swal("Action cancel");
                            }
                        });
                }

            },
            updateAccommodation() {
                axios.put('/accommodation/' + this.formData.id, this.formData);
                $('#manage_accommodations').modal('hide');
                this.getTableData();
            }
        },
        beforeMount() {
            this.getTableData();
        }
    }
</script>

<style scoped>

</style>
