const routes = {
    sortProductByOrderCount: (data => `/product/sortByOrderCount/${data.cat_id}`)
}
async function callApi(url) {
    let response = await fetch(url)
    let data = await response.json()
    return data
}