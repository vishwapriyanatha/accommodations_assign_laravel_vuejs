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
                <tr v-if="tableData.invoice_data">
                    <td>{{ tableData.invoice_data.residences.title }}</td>
                    <td>{{ tableData.invoice_data.resident.resident_title.name }}. {{ tableData.invoice_data.resident.name }}</td>
                    <td></td>
                </tr>
                </tbody>
                <tbody>
                <tr>
                    <td rowspan="3"></td>
                    <td>Subtotal:</td>
                    <td v-if="tableData.invoice_data">{{ tableData.invoice_data.residences.price }}</td>
                </tr>
                <tr>
                    <td>Tax:</td>
                    <td>{{ tableData.tax }}</td>
                </tr>

                <tr>
                    <td>Total:</td>
                    <td>{{ tableData.total }}</td>
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
        beforeMount() {
            this.getInvoice();
        }
    }
</script>

<style scoped>

</style>
