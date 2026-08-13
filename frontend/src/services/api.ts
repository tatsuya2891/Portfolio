const API_BASE_URL = import.meta.env.PUBLIC_API_BASE_URL;

export async function apiFetch<T>(path: string): Promise<T> {
    const response = await fetch(`${API_BASE_URL}${path}`);

    if (!response.ok) {
        throw new Error(
            `API Error: ${response.status} ${response.statusText}`
        );
    }

    return response.json() as Promise<T>;
}