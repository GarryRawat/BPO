<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  We Are Hiring
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title fs-3" id="exampleModalLabel">Apply</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form>
            <div class="row">
              <div class="col-lg-6 col-12">
                FULL NAME
                <input type="text" class="form-control" placeholder="Full NAME" style="height: 50px;">
              </div>

              <div class="col-lg-6 col-12">
                EMAIL
                <input type="email" class="form-control" placeholder="Email" style="height: 50px;">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-lg-6 col-12">
                CONTACT NUMBER
                <input type="number" class="form-control" placeholder="Contact Number" style="height: 50px;">
              </div>

              <div class="col-lg-6 col-12">
                ALTERNATE PHONE
                <input type="number" class="form-control" placeholder="Alternative Phone" style="height: 50px;">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-lg-6 col-12">
                QUALIFICATION
                <input type="text" class="form-control" placeholder="Qualification" style="height: 50px;">
              </div>

              <div class="col-lg-6 col-12">
                EXPERIENCE
                <select class="form-select" aria-label="Default select example" style="height: 50px;">
                  <option selected>Select Experience</option>
                  <option value="1">Fresher</option>
                  <option value="2">Experienced</option>

                </select>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-lg-6 col-12">
                AADHAR NUMBER
                <input type="number" class="form-control" placeholder="Aadhar Number" style="height: 50px;">
              </div>

              <div class="col-lg-6 col-12">
                PAN NUMBER
                <input type="text" class="form-control" placeholder="Pan Number" style="height: 50px;">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-lg-6 col-12">
                SOURCE
                <textarea class="form-control" placeholder="E.g. classified,google,naukri,radio,linkedin etc" style="height: 90px;"></textarea>
              </div>

              <div class="col-lg-6 col-12">
                ADDRESS
                <textarea class="form-control" placeholder="Address" style="height: 90px;"></textarea>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <div class="row">
          <div class="col">
            <button type="button" class="btn btn-outline-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>