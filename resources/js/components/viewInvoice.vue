<template>
    <v-app>
        <v-simple-table>
            <template v-slot:default>
                <thead>
                <tr>
                    <th class="text-left">
                        Residence
                    </th>
                    <th class="text-left">
                        Resident
                    </th>
                    <th class="text-left">
                        Price
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{tableData.invoice_data.residences.title}}</td>
                    <td>{{tableData.invoice_data.resident.resident_title.name}}. {{tableData.invoice_data.resident.name}}</td>
                    <td>{{tableData.invoice_data.residences.price}}</td>
                </tr>
                </tbody>
                <tbody>
                <tr>
                    <td rowspan="3"></td>
                    <td>Subtotal:</td>
                    <td>{{tableData.invoice_data.residences.price}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tax:</td>
                    <td>{{tableData.tax}}</td>
                </tr>

                <tr>
                    <td></td>
                    <td>Total:</td>
                    <td>{{tableData.total}}</td>
                </tr>
                </tbody>
            </template>
        </v-simple-table>
    </v-app>
</template>

<script>
    export default {
        name: "viewInvoice",
        data() {
            return {
                tableData: {}
            }
        },
        methods: {
            getInvoice() {
                axios.get('/invoice/' + this.$route.params.id).then((response) => {
                    this.tableData = response.data;
                });
            }
        },
        mounted() {
            this.getInvoice();
        }
    }
</script>

<style scoped>

</style>
