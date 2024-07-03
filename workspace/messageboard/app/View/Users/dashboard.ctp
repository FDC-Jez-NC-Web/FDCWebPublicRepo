<div style="margin-top: 130px;">
    <div class="message-list ">
        <div class=" mb-3">
            <div class="text-success mb-4 text-center">
                <h5 class=" mb-0 text-uppercase fw-bold">Message List</h5>
            </div>
            <div class="">
            <div class="text-right mb-4">
                <?= $this->Html->link('<i class="bi bi-envelope-plus"></i>&nbsp; New Message', ['controller' => 'messages', 'action' => 'new_message'], ['class' => 'btn fw-bold mb-2 text-danger', 'escape' => false]) ?>
            </div>

            <div id="messages-container" style="height: 400px; overflow-y: auto;">
                    <!-- Your messages content goes here -->
                </div>

                <div id="no-messages" class="text-center" style="display: none;">
                        <p>No messages found.</p>
                </div>

                <div class="text-center">
                    <button id="show-more" class="btn btn-secondary">Show More</button>
                </div>               
            </div>
        </div>
    </div>
</div>


