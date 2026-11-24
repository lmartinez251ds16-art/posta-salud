# Pruebas del módulo Personal médico (Guía 04)

Fecha: 24/11/2026 · Responsable: Luz Katherinne Martinez Mamani

| Caso | Resultado | Observación |
|------|-----------|-------------|
| CP01 | OK        | 5 profesionales activos con etiqueta verde y conteo de citas |
| CP02 | OK        | Filtro Inactivos muestra 1; Todos muestra 6 |
| CP03 | OK        | Filtro combinado especialidad + búsqueda respeta la especialidad |
| CP04 | OK        | Mensajes de error en español; cuenta de usuario opcional |
| CP05 | OK        | Colegiatura de 3 dígitos rechazada (4 a 6 dígitos) |
| CP06 | OK        | DNI y colegiatura duplicados rechazados con mensaje en español |
| CP07 | OK        | Manipulación de select vía F12 rechazada por Rule::in |
| CP08 | OK        | Registro con medico2@posta.test exitoso; total activos sube a 6 |
| CP09 | OK        | Cuenta medico2 ya no aparece disponible en nuevos registros |
| CP10 | OK        | Edición de especialidad sin falsos duplicados en DNI/colegiatura/cuenta |
| CP11 | OK        | Colegiatura de otro profesional rechazada al editar |
| CP12 | OK        | Dra. Huamán desactivada con aviso de citas próximas por reprogramar |
| CP13 | OK        | Dra. Huamán reactivada correctamente |
| CP14 | OK        | Sin ruta DELETE en route:list --path=personal-medico |