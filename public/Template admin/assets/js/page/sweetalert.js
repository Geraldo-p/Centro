"use strict";

$("#swal-1").click(function () {
    swal('Hello');
});

$("#swal-2").click(function () {
    swal('Good Job', 'You clicked the button!', 'success');
});

$("#swal-3").click(function () {
    swal('Good Job', 'You clicked the button!', 'warning');
});

$("#swal-4").click(function () {
    swal('Good Job', 'You clicked the button!', 'info');
});

$("#swal-5").click(function () {
    swal('Good Job', 'You clicked the button!', 'error');
});

// $("#swal-6").click(function () {
//   swal({
//     title: 'Você tem certeza',
//     text: 'Tem certeza de que deseja excluir este arquivo? Esta ação não pode ser desfeita.',
//     icon: 'warning',
//     buttons: true,
//     dangerMode: true,
//   })
//     .then((willDelete) => {
//       if (willDelete) {
//         swal('Registro Excluido com Sucesso', {
//           icon: 'success',
//         });
//       } else {

//       }
//     });
// });

$("#swal-6").click(function () {
    swal({
        title: 'Tem certeza?',
        text: 'Tem certeza que deseja excluir este registro? Esta ação não pode ser desfeita.',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                // Enviar o formulário manualmente
                // swal('Registro Excluido com Sucesso', {
                //     icon: 'success',
                // });
                document.getElementById('deleteForm').submit();
            } else {
                // O usuário cancelou a exclusão
                swal('Exclusão cancelada', {
                    icon: 'info',
                });
            }
        });
});

$("#swal-Actualizar").click(function () {
    swal({
        title: 'Tem certeza?',
        text: 'Tem certeza que deseja Actualizar o registro? Esta ação não pode ser desfeita.',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                // Enviar o formulário manualmente
                // swal('Registro Actualizado com Sucesso', {
                //     icon: 'success',
                // });
                document.getElementById('ActualizarForm').submit();
            } else {
                // O usuário cancelou a exclusão
                // swal('Exclusão cancelada', {
                //     icon: 'info',
                // });
            }
        });
});

$("#swal-inserir").click(function () {
    swal({
        title: 'Tem certeza?',
        text: 'Tem certeza que deseja Inserir Este Registro',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                // Enviar o formulário manualmente
                // swal('Registro Actualizado com Sucesso', {
                //     icon: 'success',
                // });

                document.getElementById('InserirForm').submit();
            } else {
                // O usuário cancelou a exclusão
                // swal('Exclusão cancelada', {
                //     icon: 'info',
                // });
            }
        });
});

$("#swal-7").click(function () {
    swal({
        title: 'What is your name?',
        content: {
            element: 'input',
            attributes: {
                placeholder: 'Type your name',
                type: 'text',
            },
        },
    }).then((data) => {
        swal('Hello, ' + data + '!');
    });
});

$("#swal-8").click(function () {
    swal('This modal will disappear soon!', {
        buttons: false,
        timer: 3000,
    });
});
