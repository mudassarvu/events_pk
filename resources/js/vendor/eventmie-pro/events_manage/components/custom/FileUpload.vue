<template>
    <div>
        <div class="modal modal-mask modal-big" v-if="$parent.seat_ticket_id > 0">
            <div class="modal-dialog modal-container">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" @click="close()"><span aria-hidden="true">&times;</span></button>
                        <h3 class="title">{{ ticket.title }} {{ trans('em.ticket') }} {{ trans('em.seating_chart') }}</h3>
                    </div>
                    
                    <form ref="form" @submit.prevent="validateForm" method="POST" enctype="multipart/form-data">
                        <input  type="hidden" class="form-control lgxname"  name="ticket_id" v-model="local_ticket.id">
                        <input type="hidden" class="form-control lgxname"  name="event_id" v-model="local_ticket.event_id">
                        
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">{{ trans('em.upload_seatchart') }}</label>
                                <input type="file" class="form-control-file" id="file" ref="file" @change="onChangeFileUpload()">
                            </div>   

                        </div>
                    </form>

                    <seat-component v-if="local_ticket.seatchart != null" :ticket="local_ticket"></seat-component> 
                </div>
            </div>
        </div>
    </div>
  
</template>
  
<script>
import mixinsFilters from '../../../../../../../eventmie-pro/resources/js/mixins.js';
import SeatComponent from './Seat';

export default {

    props:['ticket'],
    mixins:[
        mixinsFilters
    ],

    components: {
        SeatComponent,
    },

    data(){
        return {
            local_ticket : this.ticket,   
        }
    },
  
    methods: {
        
        // on change file upload
        onChangeFileUpload(){
            let formData = new FormData(this.$refs.form);

            formData.append('file', this.$refs.file.files[0]);

            axios.post(route('upload_seatchart'),
                formData
            ).then(res => {
                this.local_ticket = res.data.ticket; 

                this.showNotification('success', trans('em.seatchart_uploaded'));
            })
            .catch(error => {
                let serrors = Vue.helpers.axiosErrors(error);
                if (serrors.length) {
                    this.serverValidate(serrors);
                }
            });
        },

        // validate data on form submit
        validateForm(event) {
            this.$validator.validateAll().then((result) => {
                if (result) {
                    this.saveSeat(event);            
                }
            });
        },

        // show server validation errors
        serverValidate(serrors) {
            this.$validator.validateAll().then((result) => {
                this.$validator.errors.add(serrors);
            });
        },

        close(){
            this.$parent.getTickets();
            this.$parent.seat_ticket_id = 0;
        }
    
    }
  }
</script>