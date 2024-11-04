<form method="POST" >
            @csrf
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Name</label>
                    <input type="text" class="form-control text-capitalize" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="email">Email</label>
                    <input type="email" class="form-control text-lowercase" id="email" name="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="visa">Select Visa Type</label>
                    <select class="form-control text-capitalize" id="visa" name="support" required>
                        <option value="" disabled selected>Select Support</option>
                        <option value="agent">Agent Support</option>
                        
                        <option value="university">university Support</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control text-capitalize" id="message" name="message" rows="3" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
        </form>