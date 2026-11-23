# Pruebas unitarias del módulo Pacientes (Guía 03)

Fecha: 23/11/2026 · Responsable: Luz Katherinne Martinez Mamani

| Caso | Descripción | Resultado | Observación |
|------|-------------|-----------|-------------|
| CP01 | Abrir /pacientes (10 registros, total 40) | OK | |
| CP02 | Buscar un DNI existente | OK | |
| CP03 | Buscar parte de un apellido en minúsculas | OK | |
| CP04 | Con búsqueda activa, ir a la página 2 (?buscar=) | OK | |
| CP05 | Guardar el formulario vacío | OK | |
| CP06 | DNI de 7 dígitos (datos conservados) | OK | |
| CP07 | DNI de un paciente existente | OK | |
| CP08 | Fecha de nacimiento futura | OK | |
| CP09 | Celular 812345678 | OK | |
| CP10 | Registrar un paciente válido (total 41) | OK | |
| CP11 | Editar solo el celular | OK | |
| CP12 | Editar con el DNI de otro paciente | OK | |
| CP13 | Eliminar un paciente con citas | OK | |
| CP14 | Eliminar el paciente del CP10 (total 40) | OK | |
| CP15 | Abrir /pacientes/99999 (Página 404) | OK | |