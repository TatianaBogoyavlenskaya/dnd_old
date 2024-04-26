//отправка данных на сервер
export async function SendServer(addres, params) {
    return await fetch(addres, {
        method: "POST",
        body: params
    }).then(responce => responce.json())
        .then((data) => {
            return data;
        });
}