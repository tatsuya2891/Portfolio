import { apiFetch } from "./api";
import type { Work } from '../types/work';

export async function getWorks(): Promise<Work[]> {
    return apiFetch<Work[]>("/works");
}