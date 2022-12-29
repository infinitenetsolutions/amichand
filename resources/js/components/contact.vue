<template>
    <div>

        <form id="contact" method="post" >
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="f_name" id="f_name" class="form-control" placeholder="First Name" required>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="l_name" id="l_name" class="form-control" placeholder="Last Name" required>
                </div>
                <div class="form-group col-md-12">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="form-group col-md-12">
                    <input type="text" name="subject" class="form-control" placeholder="Subject" id="subject" required>
                </div>
                <div class="form-group col-md-12">
                    <div class="contact-textarea">
                        <textarea class="form-control" rows="6" placeholder="Write Message" id="message" name="message"
                            required></textarea>
                        <button class="btn btn-theme mt-4" type="submit"  value="Submit Form">Send
                            Message</button>
                    </div>
                </div>
                <div id="form-messages"></div>
            </div>
        </form>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: 'contact',
    data() {
        return {
            site_info: [],


        };
    },
    method: {
        contact() {
            form = new FormData(document.getElementById('contact'))
            axios.post('contact/store',form)
        }
    }
}
</script>