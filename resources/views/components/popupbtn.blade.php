<!-- Button -->

<button type="button" onclick="toggleModal('small-modal-id')" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900
               focus:ring-4 focus:outline-none focus:ring-gray-300
               font-medium rounded-lg text-sm px-20 py-2 text-center
               me-2 mb-2 dark:border-gray-600 dark:text-gray-400
               dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800" style="margin-left: 280px;">
                New
              </button>



              <div class="hidden fixed inset-0 z-50 flex items-center 
              justify-center overflow-x-hidden overflow-y-auto outline-none focus:outline-none" id="small-modal-id">
                <div class="relative w-auto my-6 mx-auto max-w-sm">
                  <!--content-->
                  <div 
                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                  
                     
                       <button 
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        onclick="toggleModal('small-modal-id')">
                        <span
                          class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                          ×
                        </span>
                      </button>
                    <!-- </div> -->
                    <!--body -->
                    <!-- <div class=" relative p-6 flex-auto"> -->

                      <!-- combo box and content -->
                        {{$slot}}
                      
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                      <button
                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('small-modal-id')">
                        Cancel
                      </button>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="small-modal-id-backdrop"></div>


              <!-- code penampil -->
              <script type="text/javascript">
                function toggleModal(modalID) {
                  document.getElementById(modalID).classList.toggle("hidden");
                  document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                  document.getElementById(modalID).classList.toggle("flex");
                  document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                }
              </script>