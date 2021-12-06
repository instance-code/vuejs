<template>
    <div>
        <nav
            class="navbar navbar-light bg-light shadow p-3 mb-5 bg-body rounded"
        >
            <div class="container">
                <div class="col-sm-4">
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Tìm kiếm mặt hàng"
                            aria-label="Recipient's username"
                            aria-describedby="basic-addon2"
                        />
                        <div class="input-group-append">
                            <button
                                class="btn btn-outline-secondary"
                                type="button"
                            >
                                Tìm kiếm
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        
    </div>
</template>

<script>
export default {
    name: "Header",
};
</script>

<style></style>
