package sample;

public class SocketConnection {

    public  static String ip="192.168.117.1";
    public  static int port=434;


    public static void setIp(String ip) {
        SocketConnection.ip = ip;
    }

    public static void setPort(int port) {
        SocketConnection.port = port;
    }

    public static String getIp() {
        return ip;
    }




    public static int getPort() {
        return port;
    }
}
