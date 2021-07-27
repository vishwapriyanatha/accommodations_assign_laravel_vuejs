<template>
    <v-app>
        <div>
            <v-btn small color="primary" @click="openResident">Add Resident</v-btn>
        </div>
        <v-data-table
                :headers="headers"
                :items="desserts"
                :items-per-page="10"
                class="elevation-1"
        >
            <template v-slot:item.id="{ item }">
                <div class="service-action" align="right">
                    <a title="Edit" class="normal" href="#" @click.prevent="itemAction(item)">
                        <svg data-v-629e596e="" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15" height="15"
                             viewBox="0 0 485.219 485.22" xml:space="preserve" style="
    left: 1px;
"><g data-v-629e596e=""><path data-v-629e596e="" d="M467.476,146.438l-21.445,21.455L317.35,39.23l21.445-21.457c23.689-23.692,62.104-23.692,85.795,0l42.886,42.897
		C491.133,84.349,491.133,122.748,467.476,146.438z M167.233,403.748c-5.922,5.922-5.922,15.513,0,21.436
		c5.925,5.955,15.521,5.955,21.443,0L424.59,189.335l-21.469-21.457L167.233,403.748z M60,296.54c-5.925,5.927-5.925,15.514,0,21.44
		c5.922,5.923,15.518,5.923,21.443,0L317.35,82.113L295.914,60.67L60,296.54z M338.767,103.54L102.881,339.421
		c-11.845,11.822-11.815,31.041,0,42.886c11.85,11.846,31.038,11.901,42.914-0.032l235.886-235.837L338.767,103.54z
		 M145.734,446.572c-7.253-7.262-10.749-16.465-12.05-25.948c-3.083,0.476-6.188,0.919-9.36,0.919
		c-16.202,0-31.419-6.333-42.881-17.795c-11.462-11.491-17.77-26.687-17.77-42.887c0-2.954,0.443-5.833,0.859-8.703
		c-9.803-1.335-18.864-5.629-25.972-12.737c-0.682-0.677-0.917-1.596-1.538-2.338L0,485.216l147.748-36.986
		C147.097,447.637,146.36,447.193,145.734,446.572z"></path></g>
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
        <div class="modal" tabindex="-1" role="dialog" id="manage_resident">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Manage Resident</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <ValidationObserver ref="observer" tag="form" v-slot="{handleSubmit}">
                        <form @submit.prevent="handleSubmit(submitForm)">
                            <div class="modal-body">

                                <input type="hidden" v-model="formData.id"/>
                                <div class="form-group">
                                    <label>Title*</label>
                                    <ValidationProvider name="Title" rules="required" v-slot="{ errors }">
                                        <select v-model="formData.title" class="form-control">
                                            <option v-for="titleDdl in titlesDdl" v-bind:value="titleDdl.id">
                                                {{ titleDdl.name }}
                                            </option>
                                        </select>
                                        <span class="error-font">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>
                                <div class="form-group">
                                    <label>Name*</label>
                                    <ValidationProvider rules="required" name="Name" v-slot="{ errors }">
                                        <input type="text" v-model="formData.name" class="form-control"/>
                                        <span class="error-font">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth*</label>
                                    <ValidationProvider rules="required" name="Date of Birth" v-slot="{ errors }">
                                        <input type="text" v-model="formData.date_of_birth" class="form-control"/>
                                        <span class="error-font">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>
                                <div class="form-group">
                                    <label>NIC Number*</label>
                                    <ValidationProvider rules="required" name="NIC Number" v-slot="{ errors }">
                                        <input type="text" v-model="formData.nic_number" class="form-control"/>
                                        <span class="error-font">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number*</label>
                                    <ValidationProvider rules="required" name="Mobile Number" v-slot="{ errors }">
                                        <input type="text" v-model="formData.mobile_number" class="form-control"/>
                                        <span class="error-font">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <v-col class="text-right" cols="12" sm="4">
                                    <div class="my-2">
                                        <v-btn small color="primary" type="submit">
                                            {{ (hideSaveBtn)?'save':'update' }}
                                        </v-btn>
                                    </div>
                                </v-col>
                            </div>

                        </form>
                    </ValidationObserver>
                </div>
            </div>
        </div>
    </v-app>
</template>

<script>

    export default {
        name: "resident",
        data() {
            return {
                hideSaveBtn: true,
                headers: [],
                desserts: [],
                titlesDdl: {},
                formData: {
                    id: 0,
                    title: '',
                    name: '',
                    date_of_birth: '',
                    nic_number: '',
                    mobile_number: '',
                }

            }
        },
        methods: {
            getTableData() {
                let self = this;
                self.headers = [
                    {
                        text: 'Title',
                        align: 'start',
                        sortable: false,
                        value: 'resident_title.name',
                    },
                    {
                        text: 'Name',
                        align: 'start',
                        sortable: true,
                        value: 'name',
                    },
                    {
                        text: 'Date Of Birth',
                        align: 'start',
                        sortable: true,
                        value: 'date_of_birth',
                    },
                    {
                        text: 'NIC No.',
                        align: 'start',
                        sortable: true,
                        value: 'nic_number',
                    },
                    {
                        text: 'Mobile No.',
                        align: 'start',
                        sortable: true,
                        value: 'mobile_number',
                    },
                    {
                        text: 'Action',
                        value: 'id'
                    },
                ];
                axios.get('/resident').then((response) => {
                    self.desserts = response.data;
                });
            },
            addResident() {
                delete this.formData.id;
                axios.post('/resident', this.formData);
                $('#manage_resident').modal('hide')
            },
            getTitle() {
                let self = this;
                axios.get('/title').then((response) => {
                    self.titlesDdl = response.data
                });
            },
            submitForm() {
                let self = this;
                if (self.hideSaveBtn) {
                    self.addResident();
                } else {
                    self.updateResident();
                }
            },
            resetFrom() {
                this.formData.id = 0;
                this.formData.title = this.formData.name = this.formData.date_of_birth = this.formData.nic_number = this.formData.mobile_number = '';
            },
            openModel() {
                this.getTitle();
                this.$refs.observer.reset();
                this.resetFrom();
                $('#manage_resident').modal('show')
            },
            openResident() {
                let self = this;
                self.hideSaveBtn = true;
                this.openModel()
            },
            itemAction(itemAction) {
                let self = this;
                self.openModel();
                self.hideSaveBtn = false;
                axios.get('/resident/' + itemAction.id).then((response) => {
                    delete response.data.created_at;
                    delete response.data.updated_at;
                    Object.keys(response.data).forEach(function (key) {
                        self.formData[key] = response.data[key];
                    });

                });
            },
            updateResident() {
                axios.put('/resident/' + this.formData.id, this.formData);
                $('#manage_resident').modal('hide')
            }
        },
        beforeMount() {
            this.getTableData();
        }
    }
</script>

<style scoped>

</style>
