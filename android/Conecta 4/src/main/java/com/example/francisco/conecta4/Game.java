package com.example.francisco.conecta4;

public class Game {

    int[][] tablero;

    static final int NFILAS = 6;

    static final int NCOLUMNAS = 7;

    static final int VACIO = 0;

    static final int JUGADOR = 2;

    static final int MAQUINA = 1;

    static final String JUGADORGANA = "2222";

    static final String MAQUINAGANA = "1111";

    static final String PATRONGANADOR_A = "222";


    String estado = "Jugando";
    String ganador = "";
    int turno;

    Game(int jugador) {
        tablero = new int[NFILAS][NCOLUMNAS];
        setTurno(jugador);
        iniciarTablero();
    }

    private void iniciarTablero() {
        for (int i = 0; i < NFILAS; i++) {
            for (int j = 0; j < NCOLUMNAS; j++) {
                tablero[i][j] = VACIO;
            }
        }
    }

    private void setTurno(int turno) {
        this.turno = turno;
    }

    int getTurno() {
        return turno;
    }

    void cambiarTurno(){
        this.setTurno(this.getTurno() == MAQUINA ? JUGADOR : MAQUINA);
        return;
    }

    boolean isVacio(int fila, int columna) {
        return tablero[fila][columna] == VACIO;
    }

    void setFicha(int i, int j) {
        tablero[i][j] = this.turno;
    }

    String fila(int fila) {
        String cadena = "";
        for (int i = 0; i < NCOLUMNAS; i++) {
            cadena += tablero[fila][i];
        }
        return cadena;
    }

    String columna(int columna) {
        String cadena = "";
        for (int i = 0; i < NFILAS - 1; i++) {
            for (int j = 0; j < NCOLUMNAS; j++) {
                if (j == columna) {
                    cadena = "";
                    for (int k = 0; k < NFILAS; k++) {
                        cadena += tablero[k][j];
                    }
                }
            }
        }
        return cadena;
    }

    String diagonalIzquierda(int fila, int columna) {
        String cadena = "";
        for (int i = fila, j= columna; i < NFILAS && j < NCOLUMNAS; i++, j++)
            cadena += tablero[i][j];
        for (int i = fila-1, j= columna - 1; j >= 0 && i >=0; i--, j--)
            cadena = tablero[i][j] + cadena;

        return cadena;
    }

    String diagonalDerecha(int fila, int columna) {
        String cadena = "";
        for (int i = fila, j= columna; i < NFILAS && j >= 0; i++, j--)
            cadena += tablero[i][j];
        for (int i = fila-1, j= columna + 1; j < NCOLUMNAS && i >=0; i--, j++)
            cadena = tablero[i][j] + cadena;

        return cadena;
    }

    boolean comprobarPartida(int fila, int columna) {
        if (fila(fila).contains(JUGADORGANA) || columna(columna).contains(JUGADORGANA)
                || diagonalDerecha(fila, columna).contains(JUGADORGANA) || diagonalIzquierda(fila, columna).contains(JUGADORGANA)) {
            ganador = "Jugador";
            return true;
        } else if (fila(fila).contains(MAQUINAGANA) || columna(columna).contains(MAQUINAGANA)
                || diagonalDerecha(fila, columna).contains(MAQUINAGANA) || diagonalIzquierda(fila, columna).contains(MAQUINAGANA)) {
            ganador = "Maquina";
            return true;
        }
        return false;
    }
    int maquinaRespondeMovimientoA(int columna) {
        String fila;
        int col;
        for (int i = 0; i < NFILAS; i++) {
            fila = "";
            for (int j = 0; j < NCOLUMNAS; j++) {
                fila += tablero[i][j];
                col = j;

                if (fila.contains(PATRONGANADOR_A) && col != (NCOLUMNAS - 1) && tablero[i][col + 1] == VACIO)
                    return col + 1;
                if (fila.contains(PATRONGANADOR_A) && (col - 3) >= 0 && tablero[i][col - 3] == VACIO)
                    return col - 3;

            }

        }
        return columna;
    }

    String mostrarTablero() {
        String mensaje = "";
        for (int i = 0; i < NFILAS; i++) {
            for (int j = 0; j < NCOLUMNAS; j++) {
                mensaje += tablero[i][j];
            }
        }
        return mensaje;
    }

    String tableroToString() {
        String cadena = "";
        for (int i = 0; i < NFILAS; i++) {
            for (int j = 0; j < NCOLUMNAS; j++) {
                cadena += tablero[i][j];
            }
        }
        return cadena;
    }

    void StringToTablero(String cadena) {
        int contador = 0;
        for (int i = 0; i < NFILAS; i++) {
            for (int j = 0; j < NCOLUMNAS; j++) {
                tablero[i][j] = Integer.parseInt(cadena.substring(contador, contador + 1));
                contador++;
            }
        }
    }
}